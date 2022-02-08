<template>
    <div class="page-content container-fluid" >
        <div class="wizard-v2-content">
            <carousel></carousel>
            <wizard></wizard>
        </div>
    </div>
</template>

<style>
.page-content
{
    background-image: linear-gradient(to right, #fb040f, #ff0047, #ff0078, #eb00aa, #bd08d8) !important;
}
</style>

<script>

import carousel from '../plugins/carousel'
import wizard from '../plugins/wizard'

export default
{
    components:
    {
        carousel,
        wizard
    }
}
</script>
