Theme.Bootstrap4.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'theme.bootstrap4-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: false,
			hideMode: 'offsets',
			items: [{
				title: _('theme.bootstrap4_items'),
				layout: 'anchor',
				items: [{
					html: _('theme.bootstrap4_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'theme.bootstrap4-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	Theme.Bootstrap4.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(Theme.Bootstrap4.panel.Home, MODx.Panel);
Ext.reg('theme.bootstrap4-panel-home', Theme.Bootstrap4.panel.Home);
