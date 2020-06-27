<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Request;

use Input\InputsCollection;

abstract class AbstractRequest
{
    private ?InputsCollection $query;
    private ?InputsCollection $path;
    private ?InputsCollection $body;
    private ?InputsCollection $headers;

    /**
     * AbstractRequest constructor.
     *
     * @param InputsCollection $query
     * @param InputsCollection $path
     * @param InputsCollection $body
     * @param InputsCollection $headers
     */
    public function __construct(
        ?InputsCollection $query = null,
        ?InputsCollection $path = null,
        ?InputsCollection $body = null,
        ?InputsCollection $headers = null
    ) {
        $this->query = $query;
        $this->path = $path;
        $this->body = $body;
        $this->headers = $headers;
    }

    abstract public function configure(): void;

    /**
     * @return InputsCollection
     */
    public function getQuery(): InputsCollection
    {
        return clone $this->query;
    }

    /**
     * @return InputsCollection
     */
    public function getPath(): InputsCollection
    {
        return clone $this->path;
    }

    /**
     * @return InputsCollection
     */
    public function getBody(): InputsCollection
    {
        return clone $this->body;
    }

    /**
     * @return InputsCollection
     */
    public function getHeaders(): InputsCollection
    {
        return clone $this->headers;
    }

    /**
     * @param InputsCollection|null $query
     *
     * @return self
     */
    public function setQuery(?InputsCollection $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param InputsCollection|null $path
     *
     * @return self
     */
    public function setPath(?InputsCollection $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @param InputsCollection|null $body
     *
     * @return self
     */
    public function setBody(?InputsCollection $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @param InputsCollection|null $headers
     *
     * @return self
     */
    public function setHeaders(?InputsCollection $headers): self
    {
        $this->headers = $headers;

        return $this;
    }


}