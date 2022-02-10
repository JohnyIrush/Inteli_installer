<template>
   <div class="bar">
       <div class="progress-bar"></div>
   </div>
</template>

<style scoped>
.bar
{
    height: 20px;
    background-color: floralwhite;
    position: relative;
    border-radius: 7px;
}


.bar .progress-bar
{
    position: absolute;
    height: 100%;
    background-image: linear-gradient(to right, #fb040f, #ff0047, #ff0078, #eb00aa, #bd08d8) !important;
    animation: progress-animation 5s  forwards;
    border-radius: 7px;
}

@keyframes progress-animation
{
    0%{
        width: 0%;
    }
    100%
    {
        width: 100%;
    }
}
</style>

<script>
export default {
    
}
</script>

