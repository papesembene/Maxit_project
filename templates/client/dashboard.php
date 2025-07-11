      <!-- Main Content -->
      <div class="flex-1 main-bg">
          <!-- Header -->
          <div class="bg-white p-4 shadow-sm">
              <div class="flex items-center justify-between">
                  <div class="flex items-center flex-1 max-w-lg">
                      <div class="relative w-full">
                          <input type="text" placeholder="Rechercher..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                          <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                          </svg>
                      </div>
                  </div>
                  <button class="orange-bg w-10 h-10 rounded-full flex items-center justify-center ml-4">
                      <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                      </svg>
                  </button>
              </div>
          </div>
          
          <!-- Content Area -->
          <div class="p-6">
              <!-- Balance Card -->
              <div class="card-bg rounded-lg p-6 mb-6">
                  <div class="flex items-center justify-between mb-4">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="#333" stroke="#ff6b35" stroke-width="2"/>
                              </svg>
                          </div>
                          <button class="px-4 py-2 border border-orange-500 text-orange-500 rounded-lg hover:bg-orange-50 transition-colors">
                              <span>Principal</span>
                              <svg class="w-4 h-4 inline ml-1" fill="currentColor" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                              </svg>
                          </button>
                      </div>
                  </div>
                
                  <div class="flex items-center justify-between">
                      <div>
                          <div class="flex items-center mb-2">
                              <div class="w-6 h-6 mr-2">
                                  <svg viewBox="0 0 24 24" class="w-full h-full">
                                      <circle cx="12" cy="12" r="10" fill="none" stroke="#333" stroke-width="2"/>
                                      <path d="M12 8v4l3 3" stroke="#333" stroke-width="2" fill="none"/>
                                  </svg>
                              </div>
                              <span class="orange-text text-2xl font-bold">30000 FCFA</span>
                          </div>
                          <button class="flex items-center orange-text hover:text-orange-600 transition-colors">
                              <span>Voir les transactions récentes</span>
                              <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                              </svg>
                          </button>
                      </div>
                      <button class="flex items-center orange-text hover:text-orange-600 transition-colors">
                          <span>Voir plus</span>
                          <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                          </svg>
                      </button>
                  </div>
              </div>

              <!-- Transactions List -->
              <div class="space-y-3">
                  <!-- Transaction Item -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">01 Dec 2025 , 3000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <!-- Transaction Item -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">01 Dec 2025 , 3000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <!-- Transaction Item (Reception) -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M5 13l4 4L19 7" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Réception de fonds</p>
                              <p class="text-sm text-gray-500">01 Dec 2025 , 3000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <!-- Transaction Item -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">01 Dec 2025 , 3000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <!-- Transaction Item -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">01 Dec 2025 , 3000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <!-- Transaction Item -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">01 Dec 2025 , 3000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <!-- Transaction Item -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">01 Dec 2025 , 3000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <!-- Transaction Item -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">01 Dec 2025 , 3000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <!-- Ajout de plus de transactions pour tester le scroll -->
                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M5 13l4 4L19 7" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Réception de fonds</p>
                              <p class="text-sm text-gray-500">30 Nov 2025 , 5000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">29 Nov 2025 , 2000 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M5 13l4 4L19 7" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Réception de fonds</p>
                              <p class="text-sm text-gray-500">28 Nov 2025 , 7500 FCFA</p>
                          </div>
                      </div>
                  </div>

                  <div class="transaction-item rounded-lg p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                      <div class="flex items-center">
                          <div class="w-8 h-8 mr-3">
                              <svg viewBox="0 0 24 24" class="w-full h-full">
                                  <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" fill="none" stroke="#333" stroke-width="2"/>
                              </svg>
                          </div>
                          <div>
                              <p class="font-medium text-gray-900">Envoi de fonds</p>
                              <p class="text-sm text-gray-500">27 Nov 2025 , 1500 FCFA</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
