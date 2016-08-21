<?php

$xml = simplexml_load_string($xmlData) or die("ERROR: Cannot create SimpleXML object");
$connection = mysqli_connect("localhost", "root", "", "Property") or die ("ERROR: Cannot connect");

foreach ($xml->Propery as $Property) {
$id = $Property->id;
echo "$id";
$name =  $Listing->name;
$address = $Customer->address;
$listprice = $ListPrice->ListPrice
$ListingURL = $ListingURL->ListingURL
$Bedrooms = $Bedrooms->Bedrooms
$Bathrooms = $Bathrooms->Bathrooms
$PropertyType = $PropertyType->PropertyType
$ListingKey = $ListingKey->ListingKey
$ListingCategory = $ListingCategory->ListingCategory
$ListingStatus = $ListingStatus->ListingStatus
$Photos = $Photos->Photos
$ListingDescription = $ListingDescription->ListingDescription
$MLsID = $MLsID->MLsID
$MLsName = $MLsName->MLsName
MLsNumber = $MLsNumber->MLsNumber     


$sql = "INSERT INTO Property (id, name, address, listprice, listingurl, bedrooms, bathrooms, propertytype, listing key, listingcategory, listingstatus, photos, listingdescription, mlsid, mlsname, mlsnumber) VALUES ('$id', '$name', '$address', '$listprice', '$listingurl', '$bedrooms', '$bathrooms', '$propertytype', '$listing key', '$listingcategory', '$listingstatus', '$photos', '$listingdescription', '$mlsid', '$mlsname', '$mlsnumber')";
mysqli_query($connection, $sql) or die ("ERROR: " .mysqli_error($connection) . " (query was $sql)");
}
mysqli_close($connection);
?>