<template>
    <div class="page-content container-fluid" >
        <div class="wizard-v2-content">
            <div class="row">
                <div class="col-6">
                    <carousel></carousel>
                </div>
                <div class="col-6">
                    <wizard></wizard>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

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
