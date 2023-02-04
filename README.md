## Notes 

### Links
 - https://eringgao.github.io/lucy_listings/
 - https://docs.google.com/document/d/1owEbTnD6bgI-SqOGGwI9u6g-QZea4_C_2WgcYCYaZkY/edit
 = https://docs.google.com/spreadsheets/d/1y30g-9Qka4JeBFVlMWpas9WmcbZoiiZd_NWGzonbY8M/edit#gid=0

### OOP 
 - Want to create some kind of data structure to store all data 
 - Python? 
 - How long do listings stay on the site for after "selling"

```python
class Listing: # abstraction?
    def get_type(self) -> str: 
        # Manual, Zillow, CMU
        pass 
    def get_housing_info(self) -> str: 
        # String data (paragraphs?) about housing
        pass

class SchoolListing(Listing): 
    def __init__(self): 
        # Some stuff here
```

### Individual Listing Components
 - Type of listing (Manual, Zillow, CMU)
 - Listing Price 
 - Date listed 
 - Duration of availability
 - Lister's description
 - Lister's information (requested by user)
 - Address 
 - House type (Apartment, house, etc.)
 