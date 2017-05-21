
```markdown
# XML Sample
<ImageQuery xmlns="NWMLS:EverNet:ImageQuery:1.0">
    <Auth>
        <UserId>{UserName}</UserId>
        <Password>{Password}</Password>
    </Auth>
    <Query>
        <ByListingNumber>949455</ByListingNumber>
    </Query>
    <Results>
        <Schema>NWMLS:EverNet:ImageData:1.0</Schema>
    </Results>
</ImageQuery>
```

```markdown
# Return Data Sample
Images => Image => Array

[0] => (

[ImageId] => 78556891

[ImageOrder] => 0

[UploadDt] => 2016-05-25T14:51:08.887

[BLOB] => /9j/4AAQSkZJRgABAQEAtAC0AAD/4RrERXhpZgAATU0AKgAAAAgACwEPAAIAAAAGAAAAkgEQAAIAAAATAAAAmAESAAMAAAABAAEA...

[Object-ID] => 0

),
  [1] => array(),
    etc
)
```

