        <div class="header">
            <div class="search-bar">
                <i class="bi bi-search search-icon"></i>
                <input type="text" class="search-input" placeholder="">
            </div>
            <button class="menu-button">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <div class="balance-card">
            <div class="balance-header">
                <div class="balance-arrows">
                    <i class="bi bi-arrow-up-right arrow"></i>
                    <i class="bi bi-arrow-down-left arrow"></i>
                </div>
                <div class="balance-type">Principal</div>
            </div>
            <div class="balance-amount">
                <div class="currency-icon">
                    <i class="bi bi-lightning-charge"></i>
                </div>
                <div class="amount"> <?= htmlspecialchars($compte->getSolde()) ?> FCFA</div>
            </div>
            <a href="#" class="balance-link">
                Voir les transactions récentes <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="transactions-section">
            <div class="transactions-title">Transactions (<?= count($transactions) ?>)</div>
            <a href="/user/transactions" class="see-more">
                Voir plus <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="transactions-list">
            <?php if (!empty($transactions)): ?>
                <?php foreach ($transactions as $transaction): ?>
                    <div class="transaction-item">
                        <div class="transaction-icon">
                            <i class="bi <?= $transaction->getTypeIcon() ?>"></i>
                        </div>
                        <div class="transaction-details">
                            <div class="transaction-title"><?= htmlspecialchars($transaction->getTypeLabel()) ?></div>
                            <div class="transaction-date">
                                <?= $transaction->getFormattedDate() ?>, 
                                <?= htmlspecialchars(number_format($transaction->getMontant(), 0, ',', ' ')) ?> FCFA
                            </div>
                        </div>
                        <div class="transaction-amount-container">
                            <div class="transaction-amount"><?= htmlspecialchars(number_format($transaction->getMontant(), 0, ',', ' ')) ?> FCFA</div>
                            <span class="transaction-badge <?= $transaction->getTypeBadgeClass() ?>">
                                <?= htmlspecialchars($transaction->getType()) ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="transaction-item">
                    <div class="transaction-details">
                        <div class="transaction-title">Aucune transaction</div>
                        <div class="transaction-date">Vous n'avez pas encore effectué de transactions</div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
