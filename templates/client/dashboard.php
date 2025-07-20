

        <div class="transactions-section">
            <div class="transactions-title">Transactions (<?= count($transactions) ?>)</div>
            <a href="/user/transactions" class="see-more">
                Voir plus <i class="bi bi-arrow-right"></i>
            </a>
            <a href="/user/depot" class="see-more" style="margin-left:16px; color:#ff8c00;">
                <i class="bi bi-plus-circle"></i> Déposer
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
