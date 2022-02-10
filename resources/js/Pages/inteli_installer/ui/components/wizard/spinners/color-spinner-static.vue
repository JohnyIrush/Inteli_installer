<template>
    <div id="body">
        <div class="circle"></div>
    </div>
</template>

<style scoped>
#body
{
    margin: 0;
    padding: 0;
}

.circle
{
    /* position: absolute; */
    top: calc(50% - 54px);
    left: calc(50% - 54px);
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    border: 4px solid transparent;
    border-bottom: 4px solid pink;
    border-top: 4px solid purple;
    border-radius: 50%;
}

.circle:before
{
    content: '';
    position: absolute;
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    border: 4px solid transparent;
    border-bottom: 4px solid orange;
    border-top: 4px solid red;
    border-radius: 50%;
}

.circle:after
{
    content: '';
    position: absolute;
    top: 24px;
    left: 24px;
    bottom: 24px;
    right: 24px;
    border: 4px solid transparent;
    border-bottom: 4px solid violet;
    border-top: 4px solid green;
    border-radius: 50%;
}



</style>


<script>

</script>
