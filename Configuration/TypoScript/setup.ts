plugin.tx_extbookdatabase_booklist {
    view {
        templateRootPaths.0 = EXT:extbookdatabase/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_extbookdatabase_booklist.view.templateRootPath}
        partialRootPaths.0 = EXT:extbookdatabase/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_extbookdatabase_booklist.view.partialRootPath}
        layoutRootPaths.0 = EXT:extbookdatabase/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_extbookdatabase_booklist.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_extbookdatabase_booklist.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}
[{$plugin.tx_extbookdatabase_booklist.includejquerycore} == 1]
    page.includeJSFooter.jquerybookdb = EXT:extbookdatabase/Resources/Public/js/jquery.js
[end]

page.includeJSFooter.extbookjs = EXT:extbookdatabase/Resources/Public/js/datatables.min.js
page.includeJSFooter.extbookjszwei = EXT:extbookdatabase/Resources/Public/js/extbookjs.js
page.includeCSS.extbookdbCss = EXT:extbookdatabase/Resources/Public/css/style.css
