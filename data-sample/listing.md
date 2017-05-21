#Paramater Array Sample
````
$params = array(
    "MLS", only value I know of is NWMLS
    "ListingNumber", // listing id
    "PropertyType",
    "Status", (A,CT,PB,PF,PI,PS,P,E,T,SFR,CA,R,S) Possible Values
    "County",
    "Area", 1 number up to 4 digits long
    "City",
    "BeginDate", 0000:00:00T00-00-00
    "EndDate", 0000:00:00T00-00-00
    "OfficeId",
    "AgentId",
    "Bedrooms",
    "Bathrooms",
    "Select" comma seperated string (for filter) LN.AR,CIT,etc
);
````

#Listing Response Sample
```
Array
(
    [LN] => 1063346
    [PTYP] => RESI
    [LAG] => 36214
    [ST] => Active
    [LP] => 2499999.00
    [SP] => 0.00
    [OLP] => 2499999.00
    [HSN] => 1000
    [DRP] => Array()
    [STR] => Belfair
    [SSUF] => Lane
    [DRS] => Array()
    [UNT] => Array()
    [CIT] => Bellevue
    [STA] => WA
    [ZIP] => 98004
    [PL4] => Array()
    [BR] => 5.00
    [BTH] => 4.25
    [ASF] => 3030
    [LSF] => 13317
    [UD] => 2017-01-02 16:26:26
    [AR] => 520 - Bellevue/West Of
    [DSRNUM] => 2698
    [LDR] => 2017-01-02 16:25:25
    [LD] => 2017-01-02 00:00:00
    [CLO] => 1800-01-01 00:00:00
    [YBT] => 1999
    [LO] => 5085
    [TAX] => 8964800345
    [MAP] => Array()
    [GRDX] => Array()
    [GRDY] => Array()
    [SAG] => 0
    [SO] => 0
    [NIA] => Y
    [MR] => Desirable craftsman style rambler w/5 bedrooms in the heart of downtown Bellevue! Walk to restaurants, parks, shopping & more! Formal living & dining rooms flow graciously into the great room. Large kitchen w/granite counters and newer S/S appliances is open to the breakfast nook & family room. Sumptuous private master suite w/5-piece bath & roomy walk-in closet. Attached 2+ car garage & tons of storage. Level fully-fenced backyard w/sprinkler system. Medina Elementary & Chinook Middle School!
    [LONG] => -122.207489
    [LAT] => 47.619446
    [PDR] => 1800-01-01 00:00:00
    [CLA] => 0
    [SHOADR] => Y
    [DD] => Go west on NE 10th into Vuecrest East entrance after you cross 100th Ave NE to first home on your right at the corner of Belfair and NE 10th.
    [AVDT] => 1800-01-01 00:00:00
    [INDT] => 1800-01-01 00:00:00
    [COU] => King
    [CDOM] => 0
    [CTDT] => 1800-01-01 00:00:00
    [SCA] => 0
    [SCO] => 0
    [VIRT] => Array()
    [SD] => BE
    [SDT] => 2017-01-02 16:25:25
    [FIN] => Array()
    [MAPBOOK] => Array()
    [DSR] => Vuecrest
    [QBT] => 0
    [HSNA] => Array()
    [AUCTION] => N
    [COLO] => 0
    [PIC] => 0
    [ADU] => Array()
    [ARC] => Array()
    [BDC] => Array()
    [BDL] => 0
    [BDM] => 5
    [BDU] => 0
    [BLD] => Array()
    [BLK] => Array()
    [BRM] => Array()
    [BUS] => Y
    [DNO] => Array()
    [DRM] => Main
    [EFR] => Array()
    [EL] => Clyde Hill Elem
    [ENT] => Main
    [F17] => Provided
    [FAM] => Main
    [FBG] => 0
    [FBL] => 0
    [FBM] => 3
    [FBT] => 3
    [FBU] => 0
    [FP] => 2
    [FPL] => 0
    [FPM] => 2
    [FPU] => 0
    [GAR] => 3
    [HBG] => 0
    [HBL] => 0
    [HBM] => 1
    [HBT] => 1
    [HBU] => 0
    [HOD] => 0
    [JH] => Chinook Mid
    [KES] => Main
    [KIT] => Array()
    [LRM] => Main
    [LSD] => Array()
    [LSZ] => Array()
    [LT] => Array()
    [MBD] => Main
    [MHM] => Array()
    [MHN] => Array()
    [MHS] => Array()
    [MOR] => 0
    [NC] => Array()
    [POC] => PSE
    [POL] => Array()
    [PRJ] => Array()
    [PTO] => Y
    [TQBT] => 1
    [RRM] => Array()
    [CMFE] => Array()
    [SAP] => 5
    [SFF] => 3030
    [SFS] => KCR
    [SFU] => 0
    [SH] => Bellevue High
    [SML] => Y
    [SNR] => N
    [STY] => 10 - 1 Story
    [SWC] => City of Bellevue
    [TBG] => 0
    [TBL] => 0
    [TBM] => 1
    [TBU] => 0
    [TX] => 15121
    [TXY] => 2016
    [UTR] => Main
    [WAC] => City of Bellevue
    [WFG] => Array()
    [WHT] => Array()
    [APS] => Array(
        [0] => Dishwasher
        [1] => Garbage Disposal
        [2] => Range/Oven
        [3] => Refrigerator
    )
    [BDI] => Built On Lot
    [BSM] => None
    [ENS] => Array
    (
        [0] => Electric
        [1] => Natural Gas
    )
    [EXT] => Wood
    [FEA] => Array
    (
        [0] => Bath Off Master
        [1] => Dbl Pane/Storm Windw
        [2] => Dining Room
        [3] => Disabled Access
        [4] => French Doors
        [5] => Walk-in Closet
    )
    
    [FLS] => Array
    (
        [0] => Hardwood
        [1] => Wall to Wall Carpet
    )
    
    [FND] => Array
    (
        [0] => Poured Concrete
        [1] => Slab
    )
    
    [GR] => Garage-Attached
    [HTC] => Forced Air
    [LDE] => Array
    (
        [0] => Corner Lot
        [1] => Paved Street
    )
    
    [LTV] => Array
    (
        [0] => Garden Space
        [1] => Level
    )
    
    [POS] => Sub. Tenant's Rights
    [RF] => Composition
    [SIT] => Array
    (
        [0] => Cable TV
        [1] => Disabled Access
        [2] => Fenced-Fully
        [3] => Patio
        [4] => Sprinkler System
    )
    
    [SWR] => Sewer Connected
    [TRM] => Array
    (
        [0] => Cash Out
        [1] => Conventional
    )
    
    [VEW] => City
    [WAS] => Public
    [WFT] => Array()
    [BUSR] => Array()
    [ECRT] => Array()
    [ZJD] => Array()
    [ZNC] => Array()
    [ProhibitBLOG] => Y
    [AllowAVM] => Y
    [PARQ] => None
    [BREO] => N
    [BuiltGreenRating] => Array()
    [EPSEnergy] => 0
    [ROFR] => N
    [HERSIndex] => 0
    [LEEDRating] => Array()
    [NewConstruction] => N
    [NWESHRating] => Array()
    [ConstructionMethods] => Array()
    [LotSizeSource] => KCR
    [EffectiveYearBuiltSource] => Array()
    [OFF] => Reviewed on receipt
    [SaleType] => MLS
    [POL] => array()
)


```
#More Info
##Reference:
http://evernet.nwmls.com/evernettest/RetrieveListingData.aspx