document.addEventListener(pimcore.events.postOpenObject, function (e) {
    if (e.detail.object.data.general.className === 'Car' && e.detail.object.data.data.objectType === "actual-car") {
        e.detail.object.toolbar.add({
            text: t('print-pdf'),
            iconCls: 'pimcore_icon_pdf',
            scale: 'small',
            handler: function () {
                const path = "/en/product-print?id=" + e.detail.object.id;
                window.open(path);
            }
        });
        pimcore.layout.refresh();
    }
});
