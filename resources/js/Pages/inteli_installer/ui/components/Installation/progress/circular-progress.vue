<template>
    <div class="circular">
      <div class="inner"></div>
      <div class="circle">
        <div class="number">100%</div>
        <div class="bar left">
            <div class="progress"></div>
        </div>  
        <div class="bar right">
            <div class="progress"></div>
        </div>   
      </div>
    </div>
</template>

<style scoped>
.circular
{
    height: 50px;
    width: 50px;
    position: relative;
    transform: scale(2);
} 

.circular .inner
{
    position: absolute;
    z-index: 6;
    top: 50%;
    left: 50%;
    height: 30px;
    width: 30px;
    margin: -15px 0 0 -15px;
    background: #dde6f0;
    border-radius: 100%;
    box-shadow: 0 1px 0 rgb(0, 0, 0, 0.2);
}

.circular .number 
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
    font-size: 7px;
    font-weight: 500;
    color: #4158d0;
}

.circular .bar
{
    position: absolute;
    height: 100%;
    width: 100%;
    background: #fff;
    -webkit-border-radius: 100%;
    clip:  rect(0px, 50px, 50px, 25px);
}

.circle .bar .progress
{
    position: absolute;
    height: 100%;
    width: 100%;
    -webkit-border-radius: 100%;
    clip:  rect(0px, 25px, 50px, 0px);
    background-image: linear-gradient(to right, #fb040f, #ff0047, #ff0078, #eb00aa, #bd08d8) !important;
}

.circle .left .progress
{
    z-index: 1;
    animation: left 4s linear both;
}

@keyframes left
{
    100%
    {
       transform: rotate(180deg); 
    }
}

.circle .right
{
    z-index: 3;
    transform: rotate(180deg);
}

.circle .right .progress
{
    animation: right 4s linear both;
    animation-delay: 4s;
}


@keyframes right
{
    100%
    {
       transform: rotate(180deg); 
    }
}


</style>

<script>
export default
{
    mounted()
    {
        const prog = document.querySelector('.number');
        let counter = 0;

        setInterval(() => {
            if(counter == 100)
              clearInterval();
            else
            {
                counter += 1;
                prog.textContent = counter + "%";
            }
        }, 80);
    },
}
</script>
