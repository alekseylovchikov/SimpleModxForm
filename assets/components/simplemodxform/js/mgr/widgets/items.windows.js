SimpleModxForm.window.CreateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'simplemodxform-item-window-create';
	}
	Ext.applyIf(config, {
		title: _('simplemodxform_item_create'),
		width: 550,
		autoHeight: true,
		url: SimpleModxForm.config.connector_url,
		action: 'mgr/item/create',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	SimpleModxForm.window.CreateItem.superclass.constructor.call(this, config);
};
Ext.extend(SimpleModxForm.window.CreateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'textfield',
			fieldLabel: _('simplemodxform_item_name'),
			name: 'name',
			id: config.id + '-name',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textarea',
			fieldLabel: _('simplemodxform_item_description'),
			name: 'description',
			id: config.id + '-description',
			height: 150,
			anchor: '99%'
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('simplemodxform_item_active'),
			name: 'active',
			id: config.id + '-active',
			checked: true,
		}];
	}

});
Ext.reg('simplemodxform-item-window-create', SimpleModxForm.window.CreateItem);


SimpleModxForm.window.UpdateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'simplemodxform-item-window-update';
	}
	Ext.applyIf(config, {
		title: _('simplemodxform_item_update'),
		width: 550,
		autoHeight: true,
		url: SimpleModxForm.config.connector_url,
		action: 'mgr/item/update',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	SimpleModxForm.window.UpdateItem.superclass.constructor.call(this, config);
};
Ext.extend(SimpleModxForm.window.UpdateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'hidden',
			name: 'id',
			id: config.id + '-id',
		}, {
			xtype: 'textfield',
			fieldLabel: _('simplemodxform_item_name'),
			name: 'name',
			id: config.id + '-name',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textarea',
			fieldLabel: _('simplemodxform_item_description'),
			name: 'description',
			id: config.id + '-description',
			anchor: '99%',
			height: 150,
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('simplemodxform_item_active'),
			name: 'active',
			id: config.id + '-active',
		}];
	}

});
Ext.reg('simplemodxform-item-window-update', SimpleModxForm.window.UpdateItem);