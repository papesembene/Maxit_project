

<div class="transactions-section">
    <div class="transactions-title">Tous mes comptes (2)</div>
    <a href="/client/create-account" class="see-more">
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
     <?php if (isset($accounts) && count($accounts) > 0): ?>
        <?php foreach ($accounts as $account): ?>
            <div class="transaction-item">
                <div class="transaction-icon">
                    <i class="bi bi-wallet"></i>
                </div>
                <div class="transaction-details">
                    <div class="transaction-title"><?= htmlspecialchars($account->getTypeCompte()) ?></div>
                    <div class="transaction-date">
                        <?= htmlspecialchars($account->getNumeroTelephone()) ?>, Solde disponible
                    </div>
                </div>
                <div class="transaction-amount-container">
                    <div class="transaction-amount"><?= htmlspecialchars(number_format($account->getSolde(), 0, ',', ' ')) ?> FCFA</div>
                    <span class="transaction-badge badge-info">
                        SECONDAIRE
                    </span>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="transaction-item">
            <div class="transaction-details">
                <div class="transaction-title">Aucun compte secondaire</div>
                <div class="transaction-date">Vous n'avez pas encore de compte secondaire</div>
            </div>
        </div>
    <?php endif; ?>

  
</div>