<template>
<div class="scroll-out">
    <div class="floor beranda">
        <div class="section-content">
            <div class="section-title pb30">
                <h2>Beranda</h2>
                <content-loader height=300></content-loader>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import { ContentLoader } from 'vue-content-loader'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            ContentLoader
        }
    }
</script>
