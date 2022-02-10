<template>
   <div class="card ml-2">
    <div class="row mt-3 mb-3 ml-1 mr-1">
        <div class="col-2">
            <circular_progress></circular_progress>
        </div>
        <div class="col-1 connectors">
        </div>
        <div class="col-2">
            <circular_progress></circular_progress>
        </div>
        <div class="col-1 connectors">
        </div>
        <div class="col-2">
            <circular_progress></circular_progress>
        </div>
        <div class="col-1 connectors">
        </div>
        <div class="col-2">
            <circular_progress></circular_progress>
        </div>
    </div>
   </div>
</template>

<script>

import circular_progress from './progress/circular-progress.vue'

export default
{
    components:
    {
        circular_progress
    }
}

</script>

<style>
.connectors
{
    height: 20px !important;
}
</style>
