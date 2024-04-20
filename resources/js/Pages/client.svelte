<script>
import { inertia, router } from '@inertiajs/svelte';
import Layout from "./partials/Layout.svelte";
import Paginate from "./partials/Paginate.svelte";

let pagetitle='clients'

export let clients;

function deleteClient(id){
 
    if(confirm('Vous êtez sûr de supprimer ce client')){
    router.delete('/clients/'+id)
    }
}
	
</script>

<svelte:head>

<title>{pagetitle}</title>

</svelte:head>

<Layout>
    
    <a use:inertia href="/clients/create" class="btn btn-primary btn-sm">Ajouter client</a>

    <div class="card">

     
    
        <table class="table table-bordered table-hover table-sm">
    
            <thead>
              
                    
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
    
            </thead>
    
            <tbody>

                {#each clients.data as client }
    
                <tr>
                    <td>{client.id}</td>
                    <td>{client.nom}</td>
                    <td>{client.email}</td>
                    <td>{client.phone}</td>

                    <td>
                        <a use:inertia href="/clients/{client.id}" class="btn btn-info btn-sm">Détail</a>

                        <a use:inertia href="/clients/{client.id}/edit" class="btn btn-primary btn-sm">Modifier</a>
    
                        <button on:click="{()=>deleteClient(client.id)}" class="btn btn-danger btn-sm">Supprimer</button>
                        
                    </td>
    
                </tr>
                {/each}
    
            </tbody>

    
        </table>
    
    </div> <br>
    <Paginate links={clients.links}/>
</Layout>