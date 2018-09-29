
plugin.tx_extbookdatabase_booklist {
    view {
        # cat=plugin.tx_extbookdatabase_booklist/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:ext_bookdatabase/Resources/Private/Templates/
        # cat=plugin.tx_extbookdatabase_booklist/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:ext_bookdatabase/Resources/Private/Partials/
        # cat=plugin.tx_extbookdatabase_booklist/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:ext_bookdatabase/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_extbookdatabase_booklist//a; type=string; label=Default storage PID
        storagePid =
    }
}
