#XML
```
<?xml version="1.0" encoding="utf-8" standalone="no"?>
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
            <PropertyType>RESI</PropertyType>
            <BeginDate>2017-01-01T00:00:00</BeginDate>
            <EndDate>2017-01-02T23:59:59</EndDate>
        </Query>
        <Filter />
        </Body>
    </Message>
</EverNetQuerySpecification>

```
#Response

```
Array
(
[member] => Array(
    [0] => Array
        (
            [MemberMLSID] => 102232
            [FirstName] => John
            [LastName] => Doe
            [OfficeMLSID] => 7171
            [OfficeName] => Realty Company
            [OfficeAreaCode] => 555
            [OfficePhone] => 8675309
            [OfficePhoneExtension] => 765
        )

    ),
    [1] => array(),
    [2] => array(),
    [3] => array(),
    etc
)

```
