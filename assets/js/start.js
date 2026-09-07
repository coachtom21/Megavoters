/**
 * MEGAvoters /start/ choices. Word stays on the page; only word_selected is sent later.
 *
 * @package MEGAvoters
 */
(function () {
	'use strict';

	var config = window.MEGAVOTER_START_CONFIG || {
		observeUrl: '/discover/',
		startEndpoint: '',
		doorwayEndpoint: '',
		allowedHandoffHost: 'humanblockchain.info'
	};

	function countParticipate() {
		if (!config.doorwayEndpoint) {
			return;
		}
		try {
			if (sessionStorage.getItem('mv_door_participate') === '1') {
				return;
			}
			sessionStorage.setItem('mv_door_participate', '1');
		} catch (e) {
			/* still send once this page load */
		}
		fetch(config.doorwayEndpoint, {
			method: 'POST',
			credentials: 'same-origin',
			headers: {
				'Content-Type': 'application/json',
				'X-WP-Nonce': config.nonce || ''
			},
			body: JSON.stringify({ event: 'participate_chosen' })
		}).catch(function () {
			/* counts are best-effort */
		});
	}

	var participatePanel = document.getElementById('participate-panel');
	var walkPanel = document.getElementById('walk-panel');
	var form = document.getElementById('mv-start-form');
	var message = document.getElementById('form-message');
	var button = document.getElementById('activate-button');

	if (!participatePanel || !walkPanel || !form || !message || !button) {
		return;
	}

	function reveal(panel) {
		participatePanel.hidden = panel !== participatePanel;
		walkPanel.hidden = panel !== walkPanel;
		panel.scrollIntoView({
			behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
			block: 'start'
		});
	}

	document.querySelectorAll('[data-path]').forEach(function (choice) {
		choice.addEventListener('click', function () {
			var path = choice.dataset.path;
			if (path === 'observe') {
				window.location.assign(config.observeUrl);
			} else if (path === 'participate') {
				countParticipate();
				reveal(participatePanel);
			} else {
				try {
					sessionStorage.removeItem('mv_start_preview');
				} catch (e) {
					/* ignore */
				}
				reveal(walkPanel);
			}
		});
	});

	form.addEventListener('submit', function (event) {
		event.preventDefault();
		message.className = '';
		message.textContent = '';
		if (!form.reportValidity()) {
			return;
		}

		var formData = new FormData(form);
		var branch = formData.get('branch');
		var wordWasSelected = Boolean(formData.get('touchstone_word'));
		var payload = {
			branch: branch,
			word_selected: wordWasSelected,
			source: 'megavoters_start',
			consent_version: '2026-09-04'
		};

		if (!config.startEndpoint) {
			message.className = 'mv-message';
			message.textContent = 'Preview complete: Utsav must connect the start endpoint before publication. No data was sent.';
			return;
		}

		button.disabled = true;
		button.textContent = 'Preparing secure handoff…';

		fetch(config.startEndpoint, {
			method: 'POST',
			credentials: 'same-origin',
			headers: {
				'Content-Type': 'application/json',
				'X-WP-Nonce': config.nonce || (window.wpApiSettings && window.wpApiSettings.nonce) || ''
			},
			body: JSON.stringify(payload)
		})
			.then(function (response) {
				if (!response.ok) {
					throw new Error('Start request failed');
				}
				return response.json();
			})
			.then(function (result) {
				var handoff = new URL(result.handoff_url);
				var hostOk = handoff.hostname === config.allowedHandoffHost;
				var httpsOk = handoff.protocol === 'https:';
				var localHttpOk = handoff.protocol === 'http:' && /\.local$/i.test(handoff.hostname);
				if (!hostOk || (!httpsOk && !localHttpOk)) {
					throw new Error('Invalid handoff destination');
				}
				window.location.assign(handoff.toString());
			})
			.catch(function () {
				message.className = 'mv-message mv-message--error';
				message.textContent = 'We could not begin device registration. Nothing was completed. Please try again later.';
				button.disabled = false;
				button.textContent = 'Activate This Device';
			});
	});
})();
