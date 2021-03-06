<?php

namespace Drupal\search_api_solr\Controller;

/**
 * Provides a listing of SolrRequestDispatcher.
 */
class SolrRequestDispatcherListBuilder extends AbstractSolrEntityListBuilder {

  /**
   * @var string
   */
  protected $label = 'Solr Request Dispatcher';

  /**
   * Returns a list of all disabled request handlers for current server.
   *
   * @return array
   * @throws \Drupal\search_api\SearchApiException
   */
  protected function getDisabledEntities(): array {
    /** @var \Drupal\search_api_solr\SolrBackendInterface $backend */
    $backend = $this->getBackend();
    return $backend->getDisabledRequestDispatchers();
  }

}
