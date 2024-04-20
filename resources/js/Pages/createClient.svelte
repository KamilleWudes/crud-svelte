<script>

import { inertia, router, useForm } from '@inertiajs/svelte';
import Layout from './partials/Layout.svelte';
    
    let form= useForm({
    nom:null,
    email:null,
    phone:null,
});

export let errors

function submit(){

    router.post('/clients',form)

}

</script>
<Layout>
  <br>
    <div class="card col-6 offset-3">
        <div class="card-header">
          Create client 
        </div>
        <div class="card-body">
            <form on:submit|preventDefault={submit}>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nom</label>
                  <input type="name" bind:value="{form.nom}" id="nom" class="form-control">
                  {#if errors.nom}
                  <div class="text-danger">{errors.nom}</div>
                  {/if}
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="email" bind:value="{form.email}" class="form-control" id="email">
                  {#if errors.email}
                  <div class="text-danger">{errors.email}</div>
                  {/if}

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">phone</label>
                    <input type="phone" bind:value="{form.phone}" class="form-control" id="phone">
                    {#if errors.phone}
                    <div class="text-danger">{errors.phone}</div>
                    {/if}
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a use:inertia href="/clients" class="btn btn-danger float-end">Retour</a>

              </form>
        </div>
      </div>

    </Layout>
