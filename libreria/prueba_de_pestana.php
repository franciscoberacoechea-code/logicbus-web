<style>
    :root {
        /* Color azul que definiste */
        --brand-blue: #e68413;
        --premium-dark: #24537b;
        --bezier: cubic-bezier(0.19, 1, 0.22, 1);
    }

    /* PESTAÑA LATERAL */
    .agenda-trigger {
        position: fixed;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        z-index: 9998;
        background: var(--premium-dark);
        color: var(--brand-blue);
        color: white;
        /* Ajuste de padding para albergar el texto vertical */
        padding: 30px 12px; 
        
        border: 1px solid var(--brand-blue);
        border-right: none;
        border-radius: 16px 0 0 16px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        transition: all 0.4s var(--bezier);
        /* box-shadow: -10px 0 30px rgba(0,0,0,0.4); */
    }

    .agenda-trigger:hover {
        padding-right: 20px;
        background: var(--brand-blue);
        color: white;
    }

    /* TEXTO VERTICAL */
    .agenda-trigger span {
        /* Propiedad mágica para verticalidad */
        writing-mode: vertical-rl; 
        text-orientation: mixed;
        
        /* Invertimos 180 grados para que se lea de arriba hacia abajo correctamente */
        transform: rotate(180deg); 
        
        font-family: 'Inter', sans-serif;
        font-size: 12px;
        letter-spacing: 4px; /* Más espacio entre letras = más lujo */
        font-weight: 700;
        text-transform: uppercase;
        white-space: nowrap;
    }

    /* OVERLAY DE CARGA (Para evitar el bloqueo de Odoo) */
    .agenda-overlay {
        position: fixed;
        inset: 0;
        background: rgba(10, 10, 12, 0.95);
        backdrop-filter: blur(15px);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        color: white;
        font-family: 'Inter', sans-serif;
    }

    .premium-loader {
        width: 40px;
        height: 40px;
        border: 3px solid rgba(19, 131, 230, 0.1);
        border-top: 3px solid var(--brand-blue);
        border-radius: 50%;
        margin-bottom: 20px;
        animation: spin 1s infinite linear;
    }

    @keyframes spin { to { transform: rotate(360deg); } }
</style>


<script>
    function openSecureAgenda() {
        const overlay = document.getElementById('loaderOverlay');
        // Tu link actualizado de Odoo
        const agendaUrl = "https://logicbus.odoo.com/book/71fb61aa";
        
        overlay.style.display = 'flex';
        
        setTimeout(() => {
            window.open(agendaUrl, '_blank');
            setTimeout(() => {
                overlay.style.display = 'none';
            }, 1000);
        }, 800);
    }
</script>