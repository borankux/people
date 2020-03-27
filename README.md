# What is this ?

Api for the Peoples project.

# What does it do ?
- [ ] Enlist people for the project.
- [ ] Schedule shared time.
- [ ] Introduction.


# Models
- User
    - id
    - name
    - email
    - password
    - avatar
    - status
    - isAdmin
    
- Profile
    - user_id
    - bio
    - github
    - site

- Availability 
    - id
    - user_id
    - from
    - till

- Skill
    - cat_id
    - id
    - name

- SkillSet
    - id
    - user_id
    - skill_id
    
- Category
    - id
    - name

- UserCategory
    - id
    - user_id
    - category_id
