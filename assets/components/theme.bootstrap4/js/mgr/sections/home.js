Theme.Bootstrap4.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'theme.bootstrap4-panel-home', renderTo: 'theme.bootstrap4-panel-home-div'
		}]
	});
	Theme.Bootstrap4.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(Theme.Bootstrap4.page.Home, MODx.Component);
Ext.reg('theme.bootstrap4-page-home', Theme.Bootstrap4.page.Home);