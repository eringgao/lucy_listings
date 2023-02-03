## Notes 

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