<template>
   <div class="card ml-2">
    <div class="row rows mt-3 mb-3 ml-1 mr-1 justify-content-center">
        <div class="col">
            <circular_progress></circular_progress>
        </div>
        <div class="col connectors">
            <progress_bar></progress_bar>
        </div>
        <div class="col">
            <circular_progress></circular_progress>
        </div>
        <div class="col connectors">
            <progress_bar></progress_bar>
        </div>
        <div class="col">
            <circular_progress></circular_progress>
        </div>
        <div class="col connectors">
            <progress_bar></progress_bar> 
        </div>
        <div class="col">
            <circular_progress></circular_progress>
        </div>
    </div>
   </div>
   <div class="card mt-5">
    <div class="row mt-5">
        <div id="" class="col stages">
           <install_inteli_system></install_inteli_system>
        </div>
        <div class="col stages" v-if="1 == 0">
           <install_packages></install_packages>
        </div>
        <div id="" class="col stages" v-if="1 == 0">
           <config_inteli_system ></config_inteli_system> 
        </div>
    </div>
   </div>
</template>

<script>

import circular_progress from './progress/circular-progress.vue'
import progress_bar from './progress/progress-bar.vue'
import config_inteli_system  from './stages/configure-inteli-system.vue'
import install_inteli_system from './stages/install-inteli-system.vue';
import install_packages from './stages/install-packages.vue';

export default
{
    components:
    {
        circular_progress,
        progress_bar,
        config_inteli_system,
        install_inteli_system,
        install_packages 
    }
}

</script>

<style scoped>
.connectors
{
    padding-top: 20px !important; 
    position: relative;
    left: -20px !important;
}
.rows
{
  width: 100% !important;
  display: flex !important;
  flex-direction: row !important;
  justify-content: center !important;
}

</style>
