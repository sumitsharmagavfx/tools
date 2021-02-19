# Free SEO Tools
Free SEO Tools is a project to help SEO Specialist to analyze their website. This project is built with Laravel Framework with spesification : 
- PHP version 7.2 or above
- Node JS version 10 or above
- Metronic HTML Template

# Features
## Word Counter
This feature for count character, word, sentence,  paragraph, reading time, and keyword density. Usually using by writer to observe keyword accuracy. 
Main source code is [here](https://tools.cmlabs.co/js/logic/word-counter.js)
## TITLE & META DESCRIPTION CHECKER
This feature for count length title and meta description website. Title and meta description crawled by api using node js and library scrapit. 
Main source code is [here](https://tools.cmlabs.co/js/logic/metachecker.js)
## JSON-LD FAQ SCHEMA GENERATOR
This feature for generate json-ld faq schema. Usually using by seo to generate faq schema which can be indexed by google. 
Main source code is [here](https://tools.cmlabs.co/js/logic/faq-json-ld.js)
## PAGESPEED TEST & INSIGHT
This feature for test speed of page and give insight for better web page. This feature use API from google [here](https://developers.google.com/speed/docs/insights/v5/get-started)
Main source code is [here](https://tools.cmlabs.co/js/logic/pagespeed.js)
## SITEMAP GENERATOR
This feature for crawl all url in website. 
Main source code is [here](https://tools.cmlabs.co/js/logic/sitemap.js)
## MOBILE-FRIENDLY TEST TOOL
This feature for check mobile friendly website use google's standard. This tools use API from google.  
Main source code is [here](https://tools.cmlabs.co/js/logic/mobiletest.js)
## SSL Checker tool
This feature for check expiration ssl in website. 
Main source code is [here](https://tools.cmlabs.co/js/logic/sslchecker.js)
## ROBOTS TXT GENERATOR
This feature for generate robots txt in wabsite. So user don't need type manually 
Main source code is [here](https://tools.cmlabs.co/js/logic/robotgenerator.js)

# Instalation
- run `git clone https://github.com/cmlabsdev/tools` to download this repository to your local
- run `cd tools` to change the directory
- run `composer install` to install all required dependencies
- run `cp .env.example .env` to create environment from template
- run `php artisan key:gen` to generate key for application
- install api repository [here](https://github.com/cmlabsdev/api-tools)

# Security
If you discover any security related issues, please email dev@cmlabs.co instead of using the issue tracker.
