Readme

This is an attempt to set up a basic income calculator and comparison tool.

Given:

adult basic income to child basic income ratio (input from a form or default to 9.0)
basic income to gdp ratio (30% or 0.30 * total gdp input from a form)

country_id                    (from GDP database table),
year                          (from GDP database table),
gdp_per_capita of a country   (from GDP database table),
child population of a country (from GDP database table),
adult population of a country (from GDP database table),

country_id               (from country database table),
2 character country code (from country database table), 
country_name             (from country database table)

Calculate:

total population,
gdp of a given country,               
Basic income fund for a given country    (example: based on 30% of gdp)                  
Yearly, Monthly, Daily income of a child (example: based on an adult to child ratio of 9)
Yearly, Monthly, Daily income of an adult

Display:

GridView:

Small Country Flag (when clicked, opens a detailed view with the country name),
Year,
GDP per capita,
Monthly Adult Basic Income
Daily Adult Basic Income
Yearly Child Basic Income
Monthly Child Basic Income

Detailed View of a Single country in a given year:
Large Country flag
Country name
Year
GDP
GDP per capita
Total Population
Adult Population
Child Population
Yearly, Monthly, and Daily Adult Basic Income
Yearly, Monthly, and Daily Child Basic Income

Medium:    website
Language:  php, javascript
Framework: Yii version 2

Mathematical calculations:

T = Total_Basic_Income_fund for a given country and year
R = Adult_BI_Per_child basic income ratio
Y = Child_yearly_basic_income
X = Adult_yearly_basic_income

Y = T / (1+R), R >= 0
X = Y * R
