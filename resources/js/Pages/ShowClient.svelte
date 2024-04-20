<script>
    import { inertia, router } from '@inertiajs/svelte';
    import Layout from './partials/Layout.svelte';
        
    export let errors
    
    export let client
    
    function submit(id){
    
        router.put('/clients/'+id,client)
    
    }
    
    </script>
    <Layout>
      <br>
        <div class="card col-6 offset-3">
            <div class="card-header">
              Détail client {client.nom}
            </div>
            <div class="card-body">
                <p>Name: {client.nom}</p>
                <p>Email: {client.email}</p>
                <p>Phone: {client.phone}</p>

                <a use:inertia href="/clients" class="btn btn-danger">Retour</a>
  
            
            </div>
          </div>
    
        </Layout>
    