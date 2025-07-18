<div class="header">
    <div class="search-bar">
        <i class="bi bi-search search-icon"></i>
        <input type="text" class="search-input" placeholder="Rechercher un compte...">
    </div>
    <button class="menu-button">
        <i class="bi bi-list"></i>
    </button>
</div>

<div class="balance-card">
    <div class="balance-header">
        <div class="balance-arrows">
            <i class="bi bi-wallet2 arrow"></i>
            <i class="bi bi-plus-circle arrow"></i>
        </div>
        <div class="balance-type">Mes Comptes</div>
    </div>
    <div class="balance-amount">
        <div class="currency-icon">
            <i class="bi bi-cash-stack"></i>
        </div>
        <div class="amount">445 000 FCFA</div>
    </div>
    <a href="/user" class="balance-link">
        <i class="bi bi-arrow-left"></i> Retour au tableau de bord
    </a>
</div>

<div class="transactions-section">
    <div class="transactions-title">Tous mes comptes (2)</div>
    <a href="/user/comptes/nouveau" class="see-more">
        <i class="bi bi-plus-circle"></i> Nouveau compte
    </a>
</div>

<div class="transactions-list">
    <!-- Compte Principal -->
    <div class="transaction-item">
        <div class="transaction-icon">
            <i class="bi bi-lightning-charge"></i>
        </div>
        <div class="transaction-details">
            <div class="transaction-title">Compte Principal</div>
            <div class="transaction-date">
                **** **** **** 1234, Solde disponible
            </div>
        </div>
        <div class="transaction-amount-container">
            <div class="transaction-amount">125 000 FCFA</div>
            <span class="transaction-badge badge-success">
                PRINCIPAL
            </span>
        </div>
    </div>

    <!-- Compte Secondaire -->
    <div class="transaction-item">
        <div class="transaction-icon">
            <i class="bi bi-wallet"></i>
        </div>
        <div class="transaction-details">
            <div class="transaction-title">Compte Secondaire</div>
            <div class="transaction-date">
                **** **** **** 5678, Solde disponible
            </div>
        </div>
        <div class="transaction-amount-container">
            <div class="transaction-amount">320 000 FCFA</div>
            <span class="transaction-badge badge-info">
                SECONDAIRE
            </span>
        </div>
    </div>
</div>