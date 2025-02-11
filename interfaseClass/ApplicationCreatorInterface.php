<?php
declare(strict_types=1);
namespace interfaseClass;

//метод для сотрудника который может заниматься разработкой приложения
interface ApplicationCreatorInterface {
    public function applicationDevelopment(string $development);
}