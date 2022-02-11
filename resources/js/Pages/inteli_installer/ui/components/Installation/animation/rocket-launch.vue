<template>
   <div id="body">
    <div class="scene">
        <i class="fas fa-rocket"></i>
        <span class="cloud cloud1"><i class="fas fa-cloud"></i></span>
        <span class="cloud cloud2"><i class="fas fa-cloud"></i></span>
        <span class="cloud cloud3"><i class="fas fa-cloud"></i></span>
    </div>
   </div>
</template>


<style scoped>
#body
{
    margin: 0;
    padding:  0;
}
.scene
{
    position: relative;
    transform: translate(-50%, -50%);
    top: 100px;
    left: 120px;
    width: 250px;
    height: 250px;
    background: #3b93ff;
    border: 12.5px solid #fff;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: inset 0 0 100px rgba(0, 0, 0, .5);
    animation: animateScene 5s linear infinite;
}

.scene:before
{
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .3);
    z-index: 1;
}

.fa-rocket
{
    position: absolute;
    top: 50%;
    left: 49.3%;
    transform: translate(-50%, -50%) rotate(-45deg);
    color: #fff;
    font-size: 6.25em !important;
    animation: animateRocket .2s linear infinite;
    text-shadow: -6.25px 9.375px 6.25px rgba(0, 0, 0, .2);
}


.cloud
{
    position: absolute;
    color: #ccc;
    animation: animateCloud 1s linear infinite;
}

.cloud1
{
    left: 10%;
    font-size: 3.75em;
}

.cloud2
{
    left: 45%;
    font-size: 1.875em;
    z-index: -1;
    animation-delay: -0.4;
}

.cloud3
{
    right: 20%;
    font-size: 2.75em;
}

@keyframes animateRocket
{
    0%
    {
        transform: translate(-50%, -50%) rotate(-45deg) translate(0,0)
    }

    50%
    {
        transform: translate(-50%, -50%) rotate(-45deg) translate(-3.125px,3.125px)
    }
    
    100%
    {
        transform: translate(-50%, -50%) rotate(-45deg) translateX(0,0)
    }
}


@keyframes animateCloud
{
    0%
    {
        transform: translateY(-100%)
    }

    100%
    {
        transform: translateY(1000%)
    }
}

@keyframes animateScene
{
    0%
    {
        background: #b339ff;
    }

    50%
    {
        background:  rgb(226, 50, 79);
    }
    70%
    {
        background: purple;
    }
    
    100%
    {
        background: #b339ff;
    }

}
</style>

<script>
export default {
    
}
</script>