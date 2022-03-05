# Bookdatabase
Simple TYPO3 Bookdatabase

Have a look at [/Documentation/Introduction/Index.rst](./Documentation/Introduction/Index.rst) for full documentation.

## Features:

Works with TYPO3 10.4 - 11.5

## Description:

- Entry
  - Management of categories, publishers, language, owner, book series, condition, place, person who borrowed a book, type
  - Recording of all important data (see above as well as Isbn, description, keywords,... )

- Output 
  - sortable and filterable (jQuery DataTables)
  - List and detail view
  - Creates a signature for every book, build from owneritemshortcut-bookuid-locationshortcut, i.e. criwe-12345-shelf1 

## Pros & Cons

- Pros
  - I use the extension for my own books, so it will be updated for new TYPO3-versions (when I have the time and want to, but it will)  
  - It works 

- Cons
  - the extension is designed for my requirements and some things might not be solved optimally
  - I will maintain the extension for only ONE TYPO3 version (the one I use at the moment)

## Installation
 
 - Install via Ext-Manager or composer
 - Create sysfolder for the data and create books, categories etc. there
- Add static template
 - Set storage-pid (the sysfolder where the books are) and choose if jQuery core should included (default: not included) via constant editor
 - Insert plugin for output
 
