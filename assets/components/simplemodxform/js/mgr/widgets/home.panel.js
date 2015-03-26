SimpleModxForm.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'simplemodxform-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			html: '<h2>' + _('simplemodxform') + '</h2>',
			cls: '',
			style: {margin: '15px 0'}
		}, {
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: true,
			hideMode: 'offsets',
			items: [{
				title: _('simplemodxform_items'),
				layout: 'anchor',
				items: [{
					html: _('simplemodxform_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'simplemodxform-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	SimpleModxForm.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(SimpleModxForm.panel.Home, MODx.Panel);
Ext.reg('simplemodxform-panel-home', SimpleModxForm.panel.Home);
