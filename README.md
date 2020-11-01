# Bookdatabase
Simple TYPO3 Bookdatabase

## Features:

Works with TYPO3 10.4 (use version 0.1.0 for TYPO3 8.7)

## Description:

- Entry
  - Management of categories, publishers, language, owner, book series, condition, place, person who borrowed a book, type
  - Recording of all important data (see above as well as Isbn, description, keywords,... )

- Output 
  - sortable and filterable (jQuery DataTables)
  - List and detail view
  - Creates a signature for every book, build from owneritemshortcut-bookuid-locationshortcut, i.e. criwe-12345-self1 

## Pros & Cons

- Pros
  - I use the extension for my own books, so it will be updated for new TYPO3-versions (when I have the time and want to, but it will)  
  - It works 

- Cons
  - the extension is designed for my requirements and some things may not be solved optimally
  - I will maintain the extension for only ONE TYPO3 version (the one I use at the moment)

## Installation
 
 - Install via Ext-Manager
 - Create sysfolder for the data and create books, categories etc. there
 - Set storage-pid (the sysfolder where the books are) and choose if jQuery core should included (default: not included) via constant editor
 - Insert plugin for output
 
