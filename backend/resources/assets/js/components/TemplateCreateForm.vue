<template>
    <div class="box box-panel">
        <div class="panel-title">
            New Template
        </div>
        <div class="panel-body">
            <form class="form">
                <label class="label">Template Name</label>
                <p class="control">
                    <input type="text" v-model="template_name" style="border-radius:0px;">
                </p>
                <label class="label">Description</label>
                <p class="control">
                    <input type="text" v-model="description" style="border-radius:0px;">
                </p>
                <label class="label">Repository URL</label>
                <p class="control">
                    <input type="text" v-model="repository_url" style="border-radius:0px;">
                </p>
                <div style="text-align:right;"> 
                    <a class="button ghost-btn" @click="storeTemplate" >CREATE</a>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        ready() {
            console.log('Component ready.') ;
        },
        data() {
            var obj =  {
                template_name : '', 
                description : '', 
                repository_url : ''
            };

            return obj;
        },
        methods: {
            storeTemplate() {
                console.log('test') ;
            }
        }
    }
</script>