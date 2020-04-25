# Report Builder Package for Laravel

A package for a technical test that I may expand on later.


## can retrieve data via database by any means.
ReportBuilder can be populated by either eloquent or other means of getting
information from the DB.

## facades
Use of a facade for a "string based alias" to enable type of report to be
defined. Use of facades I thought would be easier (in a live project, for
example) to remember and require less typing.

### generators
Facade for each generator. Would allow PDFs, CSVs to be made easily - whilst
separating that logic from the main ReportBuilder class.
