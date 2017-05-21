http://evernet.nwmls.com/evernettest/RetrieveOfficeData.aspx

#XML
```
<EverNetQuerySpecification xmlns="urn:www.nwmls.com/Schemas/General/EverNetQueryXML.xsd">
  <Message>
    <Head>
      <UserId>{UserName}</UserId>
      <Password>{UserPassword}</Password>
       <SchemaName>StandardXML1_5</SchemaName>
    </Head>
    <Body>
      <Query>
        <MLS>NWMLS</MLS>
        <ListingNumber>0</ListingNumber>
        <PropertyType>BUSO</PropertyType>
        <BeginDate>2017-01-03T18:04:00</BeginDate>
        <EndDate>2017-01-03T18:04:00</EndDate>
      </Query>
      <Filter>OfficeName,StreetCareOf,LO,FaxPhone</Filter>
    </Body>
   </Message>
</EverNetQuerySpecification>

```


#Response
```markdown
array(
    [OfficeName] => Name of Office
    [StreetCareOf] => Array ()
    [StreetAddress] => 3535 My Street Blvd SE #120
    [StreetCity] => Cooltown
    [StreetState] => WA
    [StreetZipCode] => 12345
    [StreetZipPlus4] => Array()
    [StreetCounty] => King
    [OfficeAreaCode] => 555
    [OfficePhone] => 8675309
    [FaxAreaCode] => 555
    [FaxPhone] => 8675309
    [EMailAddress] => name@email.com
    [WebPageAddress] => http://www.website.net
    [OfficeType] => BRK
    [LO] => 7033
)
```