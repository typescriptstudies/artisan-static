---
title: 'Adding a Firestore database to your Python server'
date: 2019-05-07
comments: false
---
[Cloud Firestore](https://firebase.google.com/docs/firestore) is a flexible, scalable database for mobile, web, and server development from Firebase and Google Cloud Platform.

As opposed to Google's original Firebase database, which is essentially a large JSON blob, Firestore is organized into collections of documents much like [MongoDB](https://docs.mongodb.com/).

# $[Setting up your database](https://firebase.google.com/docs/firestore/quickstart)

To set up your database log into your Google account, then ...

- open the [Firebase console](https://console.firebase.google.com/) and create a new project

- in the Develop / Database section, click __Create database__ for Cloud Firestore ![](https://i.imgur.com/Pvm9N2q.png)

- select a starting mode for your Cloud Firestore Security Rules, __test mode__ will allow full access to your client ( _not recommended_ ), use __locked mode__ to control access by your secure server ( _recommended_ )

# $[Adding the Firebase Admin SDK to Your Server](https://firebase.google.com/docs/admin/setup)

We are going to assume `pipenv` as a virtual env and dependency manager.

Install the firebase-admin module:

`pipenv install firebase-admin`

For authentication you need a __Service Account Key__. To generate the key, visit [Service accounts](https://console.firebase.google.com/project/_/settings/serviceaccounts/adminsdk), then click __Generate new private key__.

![](https://i.imgur.com/QrRUFGu.png)

Save the generated JSON key under an appropriate path in your server project's folder.

# $[Initializing your database](https://firebase.google.com/docs/firestore/quickstart)

```python
import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore

# Use a service account
cred = credentials.Certificate('path/to/serviceAccount.json')
firebase_admin.initialize_app(cred)

db = firestore.client()
```

# $[Adding data](https://firebase.google.com/docs/firestore/manage-data/add-data)

```python
doc_ref = db.collection(u'users').document(u'alovelace')
doc_ref.set({
    u'first': u'Ada',
    u'last': u'Lovelace',
    u'born': 1815
})
doc_ref = db.collection(u'users').document(u'aturing')
doc_ref.set({
    u'first': u'Alan',
    u'middle': u'Mathison',
    u'last': u'Turing',
    u'born': 1912
})
```

# $[Getting data](https://firebase.google.com/docs/firestore/query-data/get-data)

```python
users_ref = db.collection(u'users')
docs = users_ref.get()

for doc in docs:
    print(u'{} => {}'.format(doc.id, doc.to_dict()))
```

# $[Performing queries](https://firebase.google.com/docs/firestore/query-data/queries)
