<script setup>
import ChatLayout from '@/Layouts/ChatLayout.vue';
import { useForm } from '@inertiajs/vue3';
const form=useForm({
    promt:""
});
const submit=()=>{
    form.post('/chat');
}

</script>

<template>
    <ChatLayout >
        <template #aside></template>
        <div class="w-full flex text-white" ></div>
        <template #form>
            <section class="px-6 top-0">
                <div class="w-full">
                    <div class="relative flex-1 flex items-center">
                        <input type="text" class="w-full bg-slate-700 text-white rounded-lg" placeholder="Ask Laravel Ai" v-model="form.promt"  @keyup.enter="submit">
                        <div class="absolute inset-y-0 right-0 flex items-center pl-3"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send -ml-8 text-slate-200" viewBox="0 0 16 16">
  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
</svg>
                        </div>
                    </div>
                </div> </section>
        </template>

    </ChatLayout>
</template>
