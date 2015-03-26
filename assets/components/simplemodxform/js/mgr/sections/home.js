SimpleModxForm.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'simplemodxform-panel-home', renderTo: 'simplemodxform-panel-home-div'
		}]
	});
	SimpleModxForm.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(SimpleModxForm.page.Home, MODx.Component);
Ext.reg('simplemodxform-page-home', SimpleModxForm.page.Home);