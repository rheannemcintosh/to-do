<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-tdTeal dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-white">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-white">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-white">
                    Register
                </Link>
            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-tdTeal">
                <h1 class="mt-20 font-abril flex justify-center items-center text-white text-12xl">To Do</h1>
                <h2 class="font-poppins flex justify-center items-center text-white text-5xl">The 'EXTRA' To Do List</h2>
                <h3 class="mt-10 font-poppins flex justify-center items-center text-white text-xl">Coming Soon...</h3>
            </div>
            <div class="text-white p-16">

                <!-- Icon List -->
                <div class="pb-4 text-center">
                  <a class="opacity-75 hover:opacity-100 mx-10 text-4xl" href="https://github.com/rheannemcintosh/to-do"><ion-icon :icon="logoGithub" /></a>
                </div>

              <!-- Name & Developed Using -->
              <p class="mx-8 text-center font-large">Rheanne McIntosh © 2022 | Developed Using Laravel v{{ laravelVersion}}</p>
            </div>
        </div>
    </div>
</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { IonIcon } from '@ionic/vue';
import { logoGithub } from "ionicons/icons";

export default {
    components: {
      Head,
      Link,
      IonIcon,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
    },
    setup() {
      return {
        logoGithub
      };
    }
}
</script>
