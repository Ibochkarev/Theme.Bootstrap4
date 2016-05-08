var Theme.Bootstrap4 = function (config) {
	config = config || {};
	Theme.Bootstrap4.superclass.constructor.call(this, config);
};
Ext.extend(Theme.Bootstrap4, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('theme.bootstrap4', Theme.Bootstrap4);

Theme.Bootstrap4 = new Theme.Bootstrap4();