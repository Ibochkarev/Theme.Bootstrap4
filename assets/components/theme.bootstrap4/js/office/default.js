Ext.onReady(function() {
	Theme.Bootstrap4.config.connector_url = OfficeConfig.actionUrl;

	var grid = new Theme.Bootstrap4.panel.Home();
	grid.render('office-theme.bootstrap4-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});