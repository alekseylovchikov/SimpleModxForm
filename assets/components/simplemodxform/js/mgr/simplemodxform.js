var SimpleModxForm = function (config) {
	config = config || {};
	SimpleModxForm.superclass.constructor.call(this, config);
};
Ext.extend(SimpleModxForm, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('simplemodxform', SimpleModxForm);

SimpleModxForm = new SimpleModxForm();