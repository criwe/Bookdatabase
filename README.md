# Bookdatabase
Simple TYPO3 Bookdatabase

## Features:

Works with TYPO3 9.5 (should still work with 8.7)

## Description:

- Entry
  - Management of categories, publishers, language, owner, book series, condition, place, person who borrowed a book, type
  - Recording of all important data (see above as well as Isbn, description, keywords,... )

- Output 
  - sortable and filterable (jquery datatables)
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
 - set storage-pid (the sysfolder where the books are) via constant editor
 - insert plugin for output
 
