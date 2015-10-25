<?php

namespace Ojs\AdminBundle\Events;

final class AdminEvents
{
    const ADMIN_USER_CHANGE = 'ojs.admin.user.change';
    const ADMIN_CONTACT_CHANGE = 'ojs.admin.journal.contact.change';
    const JOURNAL_APPLICATION_HAPPEN = 'ojs.admin.journal.application.happen';
    const ADMIN_JOURNAL_CHANGE = 'ojs.admin.journal.change';
    const PUBLISHER_APPLICATION_HAPPEN = 'ojs.admin.publisher.application.happen';
    const PUBLISHER_MANAGER_CHANGE = 'ojs.admin.publisher.manager.change';
    const PUBLISHER_CHANGE = 'ojs.admin.publisher.change';
    const ADMIN_SUBJECT_CHANGE = 'ojs.admin.subject.change';
    const SETTINGS_CHANGE = 'ojs.admin.settings.change';
}
