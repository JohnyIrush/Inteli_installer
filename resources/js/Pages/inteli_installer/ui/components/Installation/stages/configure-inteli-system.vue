<template> 
    <div class="config">
        <img src="/images/cog.png" class="rotate_01" alt="" srcset="">
    </div>
    <div class="config">
        <img src="/images/cog.png" class="rotate_02" alt="" srcset="">
    </div>
    <div class="config">
        <img src="/images/cog.png" class="rotate_03" alt="" srcset="">
    </div>
</template>


<style scoped>
.config
{
    padding: 0;
    margin: 0;
    background-size: cover;
}

.rotate_01
{
    display: block;
    position: relative;
    top: 50%;
    left: 50%;
    width: 150px;
    height: 150px;
    margin: -60px 0 0 -280px;
    animation: animate 2s linear infinite;
}

@keyframes animate
{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
}


.rotate_03
{
    display: block;
    position: relative;
    top: 50%;
    left: 50%;
    width: 150px;
    height: 150px;
    margin: -60px 0 0 -280px;
    animation: animate3 2s linear infinite;
}

@keyframes animate3
{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
}


.rotate_02
{
    display: block;
    position: relative;
    top: 50%;
    left: 50%;
    width: 150px;
    height: 150px;
    margin: -60px 0 0 -280px;
    animation: animate2 2s linear infinite;
}

@keyframes animate2
{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(-360deg);
    }
}


.rows
{
  width: 100% !important;
  display: flex !important;
  flex-direction: row !important;
  justify-content: center !important;
}
</style>

<script>
export default {
    
}
</script>