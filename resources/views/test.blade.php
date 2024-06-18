@php
    $myArray = ["Apple", "Banana", "Orange", "Watermelon"];
@endphp

<script>
 var data = {{Js::from($myArray)}}


data.forEach(function(entry){
    console.log(entry)
})
</script>